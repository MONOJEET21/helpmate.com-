import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";

export default function HomePage() {
  const [openHire, setOpenHire] = useState(false);
  const [openApply, setOpenApply] = useState(false);

  return (
    <div className="flex flex-col items-center justify-center h-screen space-y-4 bg-gray-100 p-4">
      <h1 className="text-3xl font-bold">Welcome to Our Platform</h1>
      <p className="text-gray-600">Choose an option below:</p>
      
      <div className="flex space-x-4">
        <Button onClick={() => setOpenHire(true)} className="px-6 py-3">Hire</Button>
        <Button onClick={() => setOpenApply(true)} className="px-6 py-3">Apply</Button>
      </div>

      {/* Hire Dialog */}
      <Dialog open={openHire} onOpenChange={setOpenHire}>
        <DialogContent>
          <DialogHeader>
            <DialogTitle>Hire Talent</DialogTitle>
          </DialogHeader>
          <p>Looking for skilled professionals? Post your job here.</p>
          <Button onClick={() => setOpenHire(false)}>Close</Button>
        </DialogContent>
      </Dialog>
      
      {/* Apply Dialog */}
      <Dialog open={openApply} onOpenChange={setOpenApply}>
        <DialogContent>
          <DialogHeader>
            <DialogTitle>Apply for Jobs</DialogTitle>
          </DialogHeader>
          <p>Find your next opportunity by applying to open positions.</p>
          <Button onClick={() => setOpenApply(false)}>Close</Button>
        </DialogContent>
      </Dialog>
    </div>
  );
}